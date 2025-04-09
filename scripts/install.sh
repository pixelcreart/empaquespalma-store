#!/bin/bash

echo "Installing dependencies..."

docker compose run --rm php composer install

echo "Dependencies installed."