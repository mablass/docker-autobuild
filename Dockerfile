FROM nginx:1.15.8-alpine
LABEL version=”1.0.0"
ADD index.html /index.html
COPY index.html /usr/share/nginx/html/index.html
