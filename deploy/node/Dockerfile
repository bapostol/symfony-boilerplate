FROM node:18.7.0-alpine

WORKDIR /app

RUN apk add yarn

RUN yarn create react-app my-admin

WORKDIR /app/my-admin

RUN yarn add @api-platform/admin

COPY App.js /app/my-admin/src/App.js

EXPOSE 3000

# start app
CMD ["yarn", "start"]
