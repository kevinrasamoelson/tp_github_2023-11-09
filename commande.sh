#!/bin/bash
git status
echo "Visualiser l'etat des fichier"
mkdir Sources
echo"cree une dossier qui va contenir les fichiers"
mv index.php /c/Users/TOSHIBA/Desktop/tp_github_2023-11-09/Sources/index.php
mv traitement.php /c/Users/TOSHIBA/Desktop/tp_github_2023-11-09/Sources/traitement.php
mv traitement.js /c/Users/TOSHIBA/Desktop/tp_github_2023-11-09/Sources/traitement.js
mv model.php /c/Users/TOSHIBA/Desktop/tp_github_2023-11-09/Sources/model.php
echo "deplacement des fichiers vers le dossier Sources"
cd Sources
touch text.txt
echo "cree un fichier text ,comme dans un bloc note"
echo text.txt >"Bonjour aux visiteurs , merci pour la visualisation de mon code" 
cd ..

git add .
echo "Ajouter toute les fichiers vers le repos"
git status 
echo "VIsualiser les dossiers ajouter"
git commit -m "Liste des clients ou utilisateurs sur EXO github "
git log
echo "loger sur les commites"
git push 
echo "pusher les donnees vers les depots de github"
echo "C'est un examen GITHUB"

