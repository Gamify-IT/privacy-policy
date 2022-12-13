FROM nginx:alpine as production-build

COPY index.html /usr/share/nginx/html
COPY de.html /usr/share/nginx/html

EXPOSE 80/tcp