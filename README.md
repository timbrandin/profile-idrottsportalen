# NGBC

Norwegian green building council

# Using grunt to build less
We use less and grunt to build our own bootstrap version. Set this up

## Install node

OSX:

    brew install node
	
Ubuntu:

    sudo apt-get install python-software-properties python g++ make
	sudo add-apt-repository ppa:chris-lea/node.js
	sudo apt-get update
	sudo apt-get install nodejs
	
## Install grunt and bower

    sudo npm install -g bower grunt-cli

## Set up the repo

Go to the platform repo and run the following:

    npm install && bower install && grunt less
	
## Watch during development

    grunt watch
  
