Boxmeup
=======

> Please note, the 3.0 branch is **unstable** and **incomplete**! The current hosted version of the application is on the master branch (>= 2.4, < 3).

> If you would like to contribute to the version that can be deployed right away, please target pull requests to the master branch, it can be integrated into the 3.0 branch as well if desired (or applicable).

[![Join the chat at https://gitter.im/boxmeup/Boxmeup](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/boxmeup/Boxmeup?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Boxmeup is a web and mobile application to help users keep track of what they have in their containers and how to find items in specific containers.

[![Build Status](https://img.shields.io/travis/boxmeup/Boxmeup/3.0.svg?style=flat)](https://travis-ci.org/boxmeup/Boxmeup)
[![Docker Image](https://img.shields.io/docker/pulls/cjsaylor/boxmeup.svg?style=flat)](https://hub.docker.com/r/cjsaylor/boxmeup)
[![Huboard](https://img.shields.io/badge/Hu-Board-7965cc.svg?style=flat)](https://huboard.com/boxmeup/Boxmeup)

# Requirements

* Docker v1.8+ (PHP 5.6, Apache 2.4, MySQL 5.6, Sphinxsearch 2.0+)
* Composer
* NodeJS (npm)
* Bower
* Grunt CLI

# Quick start

```bash
npm install && bower install && composer install
cp .env.sample .env
docker-compose up -d
```

# Build CSS/JS

```bash
grunt build
```

# Debug

Debug mode is controlled by the `APPLICATION_ENV` environment variable. The debug toolbar is controlled via `DEBUG` environment variables.

# Contributing

See the [CONTRIBUTING.md](https://github.com/boxmeup/Boxmeup/blob/3.0/CONTRIBUTING.md) document.

# License (GPLv3)

This software is licensed under GPLv3. See the [LICENSE.md](https://github.com/boxmeup/Boxmeup/blob/3.0/LICENSE.md) for complete GPLv3 license attached to this software.
