#loob uue git repository sellesse kausta kus asud
git init
#lisame repository (nt github või bitbucket)
git remote add origin github.com:kasutaja/laraveltest.git
#olukorra ülevaade (ka konflikti lahenduse nägemiseks)
git status
#failide lisamiseks commit jaoks
git add .gitignore
git add *.txt
git add all
#muudetud failide pakendamine
git commit -m "kommentaar"
#failide laadimiseks serverisse (origin ehk server ja master ehk branch)
git push -u origin master
#kuvab commit ajaloo
git log
#võtab serverist viimase versiooni (nt kui muudetud on mujal kui teie arvutist)
git pull origin master --allow-unrelated-histories
#git config --global user.email example@address.com