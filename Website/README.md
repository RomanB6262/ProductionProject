# ProductionProject


Commnads i will need: 

php artisan serve --host 0.0.0.0 --port 8080 ------- To start Laravel

git status ------- this will tell you what has changed this the last snapshot (commit point)

git add . ------- new files are not tracked. add tells git to add a file to be tracked. The full stop signifies all new files, but can be replaced with just a filename

git commit -am "######" ------ this tells git to take a snapshot of the repository. To commit your changes. -a means all the changes, m signifies the message to go with the commit

git push -------- commit is local, to have that commit on the remote (github) requires a push

git log ------- displays a history of the previous commit points

php artisan db:seed --class=ProductsTableSeeder -------Specific seeder

php artisan storage:link ---if it doesnt store images

You can also generate dummy data using Laravel Tinker for factory:
bash php artisan tinker 

 \App\Models\Product::factory()->count(10)->create();
