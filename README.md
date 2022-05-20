<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# API est hébergée sur heroku
> ## voici l'Url de ase https://apisiteannonce.herokuapp.com/ 
### Routes
#### Les annonces 
 - **GET**      api/annonces                        => liste des annonces 
 - **POST**     api/addannonces                     => ajout d'annonces
 - **PUT**      api/updateannonces/{id}             => mise à jour d'annonces
 - **DELETE**   api/deleteannonces/{id}             => suppréssion d'annonces
 - **GET**      api/showannonces/{id}               => afficher une annonce 
 - **GET**      api/searchannonces/{titre}          => rechercher une annonce à partitre de son titre
 #### Les commentaires
 - **GET**      api/commentaires                    => liste des commentaires
 - **POST**     api/addcommentaires                 => ajouter un commentaire
 - **PUT**      api/updatecommentaires/{id}         => mise à jour dun commentaire
 - **DELETE**   api/deletecommentaires/{id}         => suppréssion dun commentaire
 - **GET**      api/showcommentaires/{id}           => afficher un commentaire 
