#!/bin/bash
DIR="$( cd "$( dirname "$0" )" && pwd )"
source "${DIR}/setup.sh" $1

# Safety
if [ -d "${base_path_workspace}/${name}" ]; then

  echo "Workspace: ${base_path_workspace}/${name}" 
  read -p "Are you sure you want to remove and rebuild this workspace?  It cannot be undone or restored. (y/n) "
  if [ $REPLY != "y" ]; then
    echo "Exiting..."
    exit 1
  fi
  
  # Empty database
  echo "Emptying database..."
  cd ${base_path_workspace}/${name}
  drush -y sql-drop
  
  # Move out of the directory
  cd ${base_path_workspace}
  
  # Set permissions
  echo "Setting permissions..."
  sudo chmod -R 777 ${base_path_workspace}/${name}
  # Remove existing files
  echo "Removing existing files"
  rm -Rf ${base_path_workspace}/${name}

fi

# Reinstall
${base_path_project}/${name}/config/install.sh ${1}