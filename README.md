Pantheon Composer Template
====

A repository template for new Drupal 8 Acquia sites based on
[Acquia Drupal Minimal Project](https://github.com/acquia/drupal-minimal-project).

## Probo Integration

This repository is ready to be integrated with Probo.CI to install a fresh copy
of Drupal 8. Additional configuration to the .probo.yaml file is required to
manage configuration imports after the site has been installed.

## How to Use This Template

Below you can find step by step documentation for creating a new Drupal 8
project repository controlled by Composer that lives on GitHub and is hosted on
Acquia.

1. Create a new GitHub repo for the project site using this repository as a template.
2. Add the Acquia remote repo URL to the GitHub repo you cloned.
   Replace `ACQUIA_GIT_REPO` with Acquia repo connection info from the Acquia
   site page.

       git remote add acquia ACQUIA_GIT_REPO

### @todo: Update based on what we're doing for Acquia.
7. Git pull the Acquia remote with `--allow-unrelated-histories` and fix any merge conflicts.

       git pull pantheon master --allow-unrelated-histories

8. Git force push to the Github remote master branch.

       git push --force

9. Git force push to the `pantheon master` remote branch.

       git push --force pantheon master

10. Copy the Jenkins [Deploy TEMPLATE from Github to Acquia Dev](https://jenkins.ops.zivtech.com/job/Deploy%20TEMPLATE%20from%20Github%20to%20Acquia%20Dev/)
    job and name it "Deploy PROJECT from Github to Acquia Dev.
12. Configure ssh keys...
13. Navigate to the GitHub repository settings page and under **Webhooks**
    click **Add webhook**. Use the following credentials:
  
    | Setting                                              | Value                                             |
    | ---------------------------------------------------- | ------------------------------------------------- |
    | Payload URL                                          | `https://jenkins.ops.zivtech.com/github-webhook/` |
    | Content type                                         | `application/json`                                |
    | Secret                                               |                                                   |
    | SSL Verification                                     | `Enable SSL verification`                         |
    | Which events would you like to trigger this webhook? | `Just the push event`                             |

11. Copy the `example.README.md` and update badges and instructions accordingly.
