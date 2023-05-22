let req =  new XMLHttpRequest();
// req.onreadystatechange = function () {
//     if(req.readyState == 4 && (req.status == 200|| req.status == 0)){
//         console.log(req);
//         let donnees = JSON.parse(req.response)
//         console.log(donnees);
//     }else if (req.readyState<4){
//         console.log(req.readyState);
//     }
// }
// req.open("GET","http://localhost/Api/PHP/api-rest/produits/lire.php",true)
// req.send();
req.onreadystatechange = function () {
    if (req.readyState ==4 && req.status == 200 ) {  
        let reponse  = JSON.parse(req.response)
        console.log(reponse.message);
    }
}
let donnees = {
    id: 69,
    nom : "Produit modifie",
    description:"Description du produit modifie",
    prix :79,
    categories_id:3
}
req.open("PUT","http://localhost/Api/PHP/api-rest/produits/modifier.php",true)
req.send(JSON.stringify(donnees));

