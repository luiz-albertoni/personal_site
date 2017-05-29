ls
cd /home/ubuntu/personal_site
git pull origin stage
rm -rf vendor
composer install
composer dump-autoload
rm -rf public/build/js/
rm -rf public/build/css/
gulp
