FROM node:16.7-alpine3.14
ENV NODE_ENV=production
WORKDIR /app
COPY ./package.json ./packeage*.json ./
RUN npm install && npm cache clean --force
COPY . .
# CMD ["node", "./bin/www"]