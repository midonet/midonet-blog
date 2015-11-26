# Backup of MidoNet Blog
First of all: it's highly unlikely you want to clone this repo, and even more unlikely that you want to push to it. This is not meant for contributions, it's simply the automated backup of https://blog.midonet.org/, created with the Revisr Wordpress plugin.

## Disaster Recovery
If possible, recover the `wp-config.php` (e.g. from an old snapshot) but you might be okay without it. Most of the information in it is host (i.e. database) specific anyway and the salts hopefully don't matter since we use GitHub logins.

The necessary steps should basically be:

1. Set up a LAMP/LEMP server
2. Create a wordpress user and database
3. Clone this repository to the docroot
4. `for sql in <docroot>/wp-content/uploads/revisr-backups/*.sql; do mysql wordpress < $sql; done`

Yes, as simple as that.
