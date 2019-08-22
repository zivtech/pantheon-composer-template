# Pantheon Composer Template

A repository template for new Drupal 8 Pantheon sites based on the https://github.com/pantheon-systems/example-drops-8-composer repository.

## Notable Changes
Below you can find the notable changes between our repository and the pantheon example-drops-8-composer repo.

- The .gitignore file is modified to allow scaffolding, vendor, core, and all other composer managed files.
- The .gitignore file is modified to ignore composer dev dependencies.
- Removed Circle.CI, GitLab, and Bitbucket functionality, as we typically use GitHub with Jenkins.
- Removed drupal console. We use drush.
- Added some commonly used contrib modules.
- Added Environment Indicator settings for local, DDEV, and Pantheon environments.

## How to Use

1. Create a new GitHub repo using this repository as a template.
2. Create a new empty pantheon site using terminus.

    terminus site:create SITENAME LABEL empty --org=zivtech --no-interaction

3. Git add the Pantheon remote repo URL to the GitHub repo you cloned.

    git remote add pantheon `PANTHEON_GIT_REPO`

4. Git pull the Pantheon remote with --allow-unrelated-histories and fix any conflicts.

    git pull pantheon master --allow-unrelated-histories

4. Git push to the pantheon remote master branch.

    git push pantheon master
