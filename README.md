# <h1 align="center">Gambling task: Affiliates Distance</h1>

Write a program that will read the full list of affiliates from this .txt file and output the name and IDs of matching affiliates within 100km, sorted by Affiliate ID (ascending).

You can use the first formula from this [Wikipedia article](https://en.wikipedia.org/wiki/Great-circle_distance) to calculate distance. Don't forget, you'll need to convert degrees to radians.

The GPS coordinates for our Dublin office are 53.3340285, -6.2535495.

You can find the affiliate list in this repository called affiliates.txt.

Please don’t forget, your code should be production ready, clean and tested!

## Features

- **Index:** List of Affilites got from affiliate.txt,  sorted by Affiliate ID (ascending).
- **Filter Affiliates:** List of affiliates within 100km from Dublin Office,  sorted by Affiliate ID (ascending).

## Technologies Used
- **HTML5**
- **TailwindCSS** 
- **PHP** 
- **Laravel**

## Installation

To run the repository locally, follow these steps:

1. Clone this repository to your local machine using `git clone https://github.com/reinosobs/gambling-task.git`
2. Navigate to the project's directory: `cd gambling-task`
3. Then install packages `composer install`
4. Access to .env file and set your Database credentials
5. Run the migration `php artisan migrate`
6. Run the unit tests `php artisan test`
7. Then run the seed to get the affiliate list from the txt file to the database
    `php artisan db:seed --class=AffiliateSeeder`
8. Finally, run the website `php artisan serve` 
10. Test the front-end functionality with the button.

## Contributing

I appreciate any feedback. If you need anything else, please let me know

## Contact

If you would like to contact me, you can reach me via email at [Mymail](sergioreinoso97@gmail.com).


