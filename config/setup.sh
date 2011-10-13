#!/bin/bash
DIR="$( cd "$( dirname "$0" )" && pwd )"
# Load configuration
source "${DIR}/cfg_parser.sh"
# Parse the config file
cfg_parser "${DIR}/config.ini"
# Enable project configuration
cfg.section.${1}

if [ ! -e "${base_path_project}/${name}/config/drushrc.${1}.php" ]
then
  echo "Invalid environment specified.  Common environment names are 'dev', 'test', and 'prod'."
  exit
fi
