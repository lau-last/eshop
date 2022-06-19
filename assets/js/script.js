// confirmation de la suppression article (page gestion_article.php)
let listBouton = document.getElementsByClassName('confirm_delete');

if(listBouton.length){
    for(let i = 0; i < listBouton.length; i++){
        listBouton[i].addEventListener('click', function (e){
            let choix = confirm('Etes vous sur ?');
            // console.log(choix);

            if(choix == false){
                e.preventDefault();
            }
        });
    }
}