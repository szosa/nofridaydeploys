# No Friday Deploys Test task

## Setup

### Technical Requirements
* Installed docker with docker-compose
### Running application 
Clone repository:

`https://github.com/szosa/nofridaydeploys.git`

In app directory build containers:

``docker compose build --no-cache``

Run docker:

``docker compose up -d``

* App are available on: <https://localhost>
* OpenAPI documentation: <https://localhost/docs/>
* Admin: >https://localhost/admin>

### Running faker
To fill database with sample data run faker:

``docker exec -it api-platform-410_php_1 bin/console doctrine:fixtures:load``
