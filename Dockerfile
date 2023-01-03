FROM nginx:alpine as production-build

COPY index.php /usr/share/nginx/html
COPY de.php /usr/share/nginx/html

EXPOSE 80/tcp