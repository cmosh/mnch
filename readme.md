# MNCH Surveys [![](https://images.microbadger.com/badges/image/cmosh/mnch.svg)](https://microbadger.com/images/cmosh/mnch "Get your own image badge on microbadger.com") [![](https://images.microbadger.com/badges/version/cmosh/mnch.svg)](https://microbadger.com/images/cmosh/mnch "Get your own version badge on microbadger.com")

 Maternal Neonatal and Child Health Surveys data collection and analysis tool, available [here](https://em.nascop.org)

## Architecture

- Laravel (PHP7), Mongodb 3.2, Redis 3.*
- efficiently/larasset used to minify assets
- Also packaged as a singular docker container

## Custom Commands

- Custom php artisan commands used for management and deploymet

### Docker compose

    docker:build        Build the specific docker service or all services.
    docker:debug        Open a privileged shell to debug a specific service
    docker:down         Stops all docker container instances. Use --v to delete all volume data.
    docker:restart      Restart the specific docker service or all services.
    docker:run          Runs mnch with pre-defined docker images. Use the --d option to daemonise in production).
    docker:start        Start the specific docker service or all services.
    docker:status       Check running containers
    docker:stop         Stops all docker container instances or specific service instance. Use --t to specify time in seconds for shutdown.

### Firebase backups

    firebase:backup     Manually run firebase backup.(Backups usually run automatically)
    firebase:restore    Restore firebase backups.

## Configuration

- Look at the .env.template