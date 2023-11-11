FROM node:alpine

ENV PORT 3000

WORKDIR /usr/src/app

RUN apk update && apk --no-cache add \
    curl \
    bash \
    && rm -rf /var/cache/apk/*

COPY package.json /usr/src/app
COPY package-lock.json /usr/src/app
COPY nuxt.config.ts /usr/src/app

RUN npm install

COPY ./client /usr/src/app/client

# RUN npm run build

EXPOSE 3000

# ENTRYPOINT ["node", ".output/server/index.mjs"]

CMD ["npm", "run", "dev"]
