# Zero Daedalus Website
##### Free and Open website design for zerodaedalus.com

Build Instructions
-------------------

First, use [Node/NPM](https://nodejs.org/) to install dependencies

```
npm install
```

Next, use [Grunt](http://gruntjs.com/) to build project

```
grunt prod
```
**-- or --**
```
grunt dev
```
> Production is compressed and uglified. Development is uncompressed with sourcemaps.

> *Default `grunt` command will build development version and launch `grunt watch` to jump straight into coding*