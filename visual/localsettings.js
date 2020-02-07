/*
* This is an example configuration for a BlueSpiceWikiFarm setup
* In this case 'httpd' is used as wiki webserver machine name as it is in our
* docker environment.
*/
'use strict';

exports.setup = function(parsoidConfig) {
	parsoidConfig.dynamicConfig = function(domain) {
		//var baseUrl = Buffer.from( domain, 'base64').toString();
		var baseUrl = "http://web/w"
		//domain = "web"
		parsoidConfig.setMwApi({
			uri: baseUrl + '/api.php',
			domain: domain,
			strictSSL: false
		});
	}
};

//parsoidConfig.setMwApi({ uri: 'https://your-mediawiki-server/api.php', prefix: 'localhost', domain: 'localhost' });