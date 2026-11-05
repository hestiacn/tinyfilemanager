# how to build?
# docker login
# docker build . -t tinyfilemanager/tinyfilemanager:master
# docker push tinyfilemanager/tinyfilemanager:master

# how to use?
# docker run -d -v /absolute/path:/var/www/html/data -p 80:80 --restart=always --name tinyfilemanager tinyfilemanager/tinyfilemanager:master

FROM serversideup/php:8.5-cli-alpine

USER root

# if run in China
# RUN sed -i 's/dl-cdn.alpinelinux.org/://aliyun.com' /etc/apk/repositories

RUN install-php-extensions gd zip

WORKDIR /var/www/html
COPY index.php /var/www/html/index.php
COPY translation.json /var/www/html/translation.json
COPY assets/ /var/www/html/assets/
COPY root/ /var/www/html/root/
RUN mkdir -p /var/www/html/root/user /var/www/html/root/guest && chown -R www-data:www-data /var/www/html
USER www-data:www-data
CMD ["php", "-S", "0.0.0.0:80"]