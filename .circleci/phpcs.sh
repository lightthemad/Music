#!/bin/bash

if [[ -z "${CIRCLE_PULL_REQUEST}" ]];
then
	echo "This is not a pull request, no PHPCS needed."
	exit 0
else
	echo "This is a pull request, continuing"
fi


echo "Getting list of changed files..."
changed_files=$(git diff-tree --no-commit-id --name-only --diff-filter=d -r HEAD)

if [[ -z $changed_files ]]
then
	echo "There are no files to check."
	exit 0
fi

# Get wpcs
echo "Registering drupal standarts"
./vendor/bin/phpcs --config-set ~/.composer/vendor/drupal/coder/coder_sniffer

echo "Checking installed paths"
./vendor/bin/phpcs -i

echo "Running phpcs..."
./vendor/bin/phpcs --standard=Drupal --extensions=php,module,inc,install,test,profile,theme,css,info,txt,md $changed_files
