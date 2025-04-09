#!/bin/bash

if [ $# -ne 1 ]; then
    echo "You must specify an environment as a parameter: test, dev, or prod."
    exit 1
fi

environment=$1

case $environment in
    test|dev|prod)
        echo "Setting up the environment: $environment"
        export ENVIRONMENT=$environment
        ;;
    *)
        echo "Invalid environment. You must specify test, dev, or prod."
        exit 1
        ;;
esac

docker compose up -d && docker compose ps