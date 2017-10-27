FROM httpd:2.4-alpine
COPY ./blog/ /usr/local/apache2/htdocs/

Expose 433 80
ENTRYPOINT /usr/sbin/httpd -D FOREGROUND
