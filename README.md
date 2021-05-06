# Drip Drupal Templates
A set of repository templates for new Drupal 8 sites with each repo being tailored to a specific hosting service we use at Zivtech.

## Service Specific Repos
- [drip-pantheon8](https://github.com/zivtech/drip-pantheon8)
  - A project template for Drupal 8 sites on Pantheon Hosting with a modified .gitignore to allow all site files to be committed to the repository.
  - Based on pantheon-systems/example-drops-8-composer.
- drip-acquia8
- drip-platformsh8
- [drip-managed8](https://github.com/zivtech/drip-managed8)
  - A project template for Drupal 8 sites on Managed Hosting with a docroot directory and modified .gitignore to allow all site files to be committed and tagged for release.
- [drip-managed9](https://github.com/zivtech/drip-managed9)
  - A project template for Drupal 9 sites on Managed Hosting with a docroot directory and modified .gitignore to allow all site files to be committed and tagged for release.

## Local Development
Each service specific repo has a base [Lando](https://docs.lando.dev/) configuration customized to that hosting service.

## Probo Integration
Each service specific repo has a base [Probo.CI](https://probo.ci/) configuration customized to that hosting service for QA and Pull Request review.
