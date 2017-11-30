#Overwatch Stats App

Laravel v5.5

###Installation
See here: https://gist.github.com/hootlex/da59b91c628a6688ceb1

###App/Http/Controllers/UserController

Handles incoming requests from:
- [ip address]/user/[username]
- [ip address]/user/[username]/update

###App/Models/BlizzardUser

Holds the Eloquent Model for a Blizzard User

###Database/Migrations/Create_Blizzard_Users

Holds the database structure for a Blizzard user

###Public/Base_Templates/<team_member>/

Holds the pure html template structure for webpages created by the other team members before they were changed to be implemented into PHP blade.

###Public

This is where you should direct apache or ngnix. It also holds client side resources like:
- css
- images
- js

###Resources/Views/

Holds the client side views, written in PHP Blade. Uses HTML for visuals, PHP used to place data on the page. Usually within {{ }} brackets or by a @ symbol before the function.

###Routes/Web

Holds the endpoints that a user enters to trigger a controller.

For example, the first route is "/" (which is the root page) which shows landing.blade.php in the views.

###Tests/Feature 

Automated Testing using PHPUnit which ensures controller functions work as intended by using assertions.

Example: 
- assertEquals(expected, input)
- assertEquals(4, 2 + 2)