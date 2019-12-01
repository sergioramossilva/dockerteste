FROM nginx:1.17.4

COPY site.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www

EXPOSE 80

CMD [ "nginx", "-g", "daemon off;" ]