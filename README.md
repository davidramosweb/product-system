# Product System

Integra distintos orígenes de datos de distintas fuentes (FTP, API) y con distintos formatos (XML, CSV, JSON, EXCEL) a una estructura común. Los datos son obtenidos, procesados y almacenados de forma periódica (cada 15min) y en el caso de detectar cambios informa de los mismos a sistemas externos.

## Instalación

```
docker-compose build
```

## Uso

### Produccion
```
docker-compose -f docker-compose.yml up -d
```

### Desarrollo

El siguiente comando creará también el contenedor de mongo-expres ([Interfaz de administración de MongoDB](http://localhost:8095/))

```
docker-compose -f docker-compose.yml -f docker-compose.dev.yml up -d
```

Usar el siguiente comando si se desea añadir los servicios de recursos externos
```
docker-compose -f docker-compose.yml -f docker-compose.dev.yml -f docker-compose.external-resources.yml up -d
```

### Importación manual
Para iniciar la importación manualmente se puede ejecutar el siguiente script
```
./cron-tasks/15min/import
```

### Simulación de recursos externos

Se han configurado dos servicios para simular las distintas fuentes (FTP, API).

```
docker-compose -f docker-compose.external-resources.yml up -d
```

Los recursos externos de prueba se encuentran en la carpeta `external-resources`.

Para definir los recursos externos sé utiliza la variable de entorno **EXTERNAL_RESOURCES** del archivo _app/.env_

```
EXTERNAL_RESOURCES='[{"type":"articulos", "src":"http://external-resources-api/Articulos.xml"},{"type":"catalog", "src":"http://external-resources-api/catalog.json"},{"type":"productos", "src":"sftp://ftp@external-resources-sftp:2222"}]'
```

### API

Pueden consultarse los productos importados a través de los siguientes EndPoints:

- GET `/products` _Todos los produtos_

- GET `/product/{ObjectId}` _Un producto por ObjectId_

- GET `/product/ean13/{ean13}` _Un producto por EAN13_

### Test
```
# run all tests of the application
docker exec -u www-data -e APP_ENV=test product-system_app sh -c "php ./vendor/bin/phpunit"
```