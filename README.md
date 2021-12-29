# allnigeria-api
This API aims to provide needed structured national data for use by developers

This API aims to provide needed structured national data for use by developers and other individuals or organisations. For now, data available includes all states, LGAs, Wards and Polling units correctly structured with the hierarchy. Feel free to use or contribute. Data is also provided as .sql or JSON:

<a href="https://allnigeria-api.herokuapp.com/data/allnigeria.json" target="_blank"> JSON download </a>

<a href="https://allnigeria-api.herokuapp.com/data/allnigeria.sql" target="_blank"> SQL download </a>


## How to use

### Consume the api
https://allnigeria-api.herokuapp.com

### Setup
* Run `composer install`
* Set `DB_DATABASE` to the name of your SQLite database file (which should be located in the `database` directory)
* Run `php artisan migrate:fresh --seed` to load the data
* Run `php artisan serve` to start the development server

You can download the SQL file <a href="https://allnigeria-api.herokuapp.com/data/allnigeria.sql" target="_blank">here</a>

## Contact Info
If you have any other enquiries or you just want to link up, <a href="https://twitter.com/_aligorithm" target="_blank"> follow me on twitter </a>
