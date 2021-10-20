# phplogin flutter
 
flutter login with php as the backend and mysql serving as the database

copy folder flutter_login to xampp/htdocs

open phpmyadmin in your browser and import database login_flutter.sql

change code in file api.dart to

class Api { static String url = "http://IPADDRESS/flutterlogin/check.php"; static String regis = "http://IPADDRESS/flutterlogin/register.php"; }


after generating you fluter project you would have your [android/ios/test/pubspec.lock/pubspec.yaml] ready
