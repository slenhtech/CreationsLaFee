/**
 * Created by Alexandre on 1/30/2016.
 */
function deleteProduct(){
    $('.fa.fa-trash-o').each(function () {
        $(this).click(function () {
            var productId =  $(this).val();
            var image = $(this).attr('data-src');
            $('#modal').html('<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"> <form method="get" role="form" action=""> <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> <h4 class="modal-title" id="myModalLabel">Supprimer produit</h4> </div><div class="modal-body"><table class="table"><tr><td width="30%"><img src="'+image+'" alt="image" class="img-responsive"></td><td>Vous &ecirc;tes sur le point de supprimer ce produit.<br/>Voulez-vous continuer?</td></tr></table> </div><div class="modal-footer"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Annuler</button> <button type="submit" value="'+productId+'" name="delete" class="btn btn-danger"><i class="fa fa-trash-o"></i> &nbsp; Supprimer produit</button></div></form></div></div></div>');
            $(function () { $('#confirm').modal()});
        });

    })
}
function editProduct(){
    $('.fa.fa-edit').each(function () {
        $(this).click(function () {
            var product = $(this).parent().parent(),
                image = product.attr('data-img'),
                description = product.attr('data-desc'),
                collections = product.attr('data-col'),
                id = product.attr('data-id'),
                form = $('#myModal2'),
                formPicture = form.find('#img'),
                formCollections = form.find('#collections'),
                formDescription = form.find('#description');
                formProductId = form.find('#id');
                formCaption = form.find('.modal-body h4'),

            formPicture.attr('src',image);
            formCollections.val(collections);
            formDescription.val(description);
            formCaption.html(description);
            formProductId.val(id);
         });
    })
}
function productFilter(category){
    $('#products-table tbody').html('');
    $.getJSON('../json/products_order_by_collections.json', function (data) {
        var j = 1;
        //Generate field
        $.each(data, function (i, field) {
            var path = field.category;
            if(field.category == 'mariages-naissances'){ path = 'portfolio/carterie/mariages/';}
            if(field.category == 'carterie-entreprises'){ path = 'portfolio/carterie/entreprises/';}
            if(field.category == 'cartes-ethniques'){ path = 'portfolio/carterie/cartes-ethniques/';}
            if(field.category == 'fetes-diverses'){ path = 'portfolio/carterie/fetes-diverses/';}
            if(field.category == 'cahiers-carnets'){ path = 'portfolio/papeterie/cahiers-carnets/';}
            if(field.category == 'conferenciers-reunion'){ path = 'portfolio/papeterie/conferenciers-kit-reunion/';}
            if(field.category == 'marque-pages'){ path = 'portfolio/papeterie/marque-page/';}
            if(field.category == 'deco'){ path = 'portfolio/accessoires/deco/';}
            if(field.category == 'etuis-pochettes'){ path = 'portfolio/accessoires/etuis-pochettes/';}
            if(field.category == 'housses'){ path = 'portfolio/accessoires/housses/';}
            if(field.category == 'portes-cles'){ path = 'portfolio/accessoires/porte-cles-bijoux/';}
            if(field.category == 'trousse-toilette'){ path = 'portfolio/accessoires/trousse-toilette/';}

            if(field.category == category){
                $('#products-table tbody').append('<tr data-img="/creationslafee/img/'+path+field.name+'" data-col="'+field.collections+'" data-category="'+field.category+'" data-desc="'+field.description+'" data-id="'+field.id+'"> <td>'+field.collections+'</td> <td width="80"><img src="/creationslafee/img/'+path+field.name+'" alt="product" width="80"></td> <td>'+field.description+'</td> <td>'+field.category+'</td><td><button class="fa fa-edit btn btn-default pull-right" value="'+field.id+'" role="button" data-toggle="modal" data-target="#myModal2"></button> &nbsp; <button class="fa fa-trash-o btn btn-default pull-right" value="'+field.id+'" role="button" data-src="/creationslafee/img/'+path+field.name+'"></button></td></tr>');
            }
        })
        //Manage fields
        deleteProduct();
        editProduct();
    })
}
function productsAll(){
    $('#products-table tbody').html('');
    $.getJSON('../json/products_order_by_desc.json', function (data) {
        var j = 1;
        //Generate field
        $.each(data, function (i, field) {
            var path = field.category;
            if(field.category == 'mariages-naissances'){ path = 'portfolio/carterie/mariages/';}
            if(field.category == 'carterie-entreprises'){ path = 'portfolio/carterie/entreprises/';}
            if(field.category == 'cartes-ethniques'){ path = 'portfolio/carterie/cartes-ethniques/';}
            if(field.category == 'fetes-diverses'){ path = 'portfolio/carterie/fetes-diverses/';}
            if(field.category == 'cahiers-carnets'){ path = 'portfolio/papeterie/cahiers-carnets/';}
            if(field.category == 'conferenciers-reunion'){ path = 'portfolio/papeterie/conferenciers-kit-reunion/';}
            if(field.category == 'marque-pages'){ path = 'portfolio/papeterie/marque-page/';}
            if(field.category == 'deco'){ path = 'portfolio/accessoires/deco/';}
            if(field.category == 'etuis-pochettes'){ path = 'portfolio/accessoires/etuis-pochettes/';}
            if(field.category == 'housses'){ path = 'portfolio/accessoires/housses/';}
            if(field.category == 'portes-cles'){ path = 'portfolio/accessoires/porte-cles-bijoux/';}
            if(field.category == 'trousse-toilette'){ path = 'portfolio/accessoires/trousse-toilette/';}

            $('#products-table tbody').append('<tr data-img="/creationslafee/img/'+path+field.name+'" data-col="'+field.collections+'" data-category="'+field.category+'" data-desc="'+field.description+'" data-id="'+field.id+'"> <td></td> <td width="80"><img src="/creationslafee/img/'+path+field.name+'" alt="product" width="80"></td> <td>'+field.description+'</td> <td>'+field.category+'</td> <td><button class="fa fa-edit btn btn-default pull-right" value="'+field.id+'" role="button" data-toggle="modal" data-target="#myModal2"></button> &nbsp; <button class="fa fa-trash-o btn btn-default pull-right" value="'+field.id+'" role="button" data-src="/creationslafee/img/'+path+field.name+'"></button></td></tr>');
        })
        //Manage fields
        deleteProduct();
        editProduct();
    })
}


//Filters
$('.data-product .treeview-menu a').each(function () {
    $(this).click(function (e) {
        var data_toggle = $(this).attr('data-toggle');
        $(this).addClass('active');
        productFilter(data_toggle);
        e.preventDefault();
    })
});
$('#display-all-button').click(function (e) {
    e.preventDefault();
    productsAll();
})

$(function () {
    productsAll();
})

var modal1 = $('myModal'),
    form1 = modal1.find('form');
