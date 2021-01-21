<p align="center">
     <h1 align="center">Yii 2 Basic project example</h1>
    <br>
</p>

Used Yii 2 Basic skeleton.

### Install with Docker
    
Start the container

    docker-compose up -d --build && docker-compose exec php composer install && docker-compose exec php yii migrate --interactive 0 && docker-compose exec php chmod -R 777 /app/assets /app/runtime
    
You can then access the application through the following URL:

    http://localhost:8000/

**NOTES:** 
- Minimum required Docker engine version `17.04` for development (see [Performance tuning for volume mounts](https://docs.docker.com/docker-for-mac/osxfs-caching/))
- The default configuration uses a host-volume in your home directory `.docker-composer` for composer caches


