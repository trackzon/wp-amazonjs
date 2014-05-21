module.exports = function(grunt) {
	require('load-grunt-tasks')(grunt);
	grunt.initConfig({
		exec: {
			phpcs: {
				cmd: 'vendor/bin/phpcs --standard=vendor/wordpress-coding-standards/WordPress *.php lib/*.php'
			},
			xgettext: {
				cmd: 'xgettext --from-code=UTF-8 -k__ -k_e -L PHP -o ./languages/messages.po ./*.php --package-name=amazonjs --package-version=1.0 --msgid-bugs-address=makoto.kw@gmail.com'
			},
			msgmerge: {
				cmd: 'msgmerge --update ./languages/amazonjs-ja.po ./languages/messages.po --backup=off'
			},
			msgfmt: {
				cmd: 'msgfmt -o ./languages/amazonjs-ja.mo ./languages/amazonjs-ja.po'
			}
		},
		compass: {
			prod: {
				options: {
					basePath: 'sass',
					environment: 'production',
					force: true
				}
			},
			dev: {
				options: {
					basePath: 'sass',
					environment: 'development',
					force: true,
					trace: true
				}
			}
		},
		watch: {
			sass_dev: {
				files: ['sass/*.scss'],
				tasks: ['compass:dev']
			}
		}
	});

	grunt.registerTask('phpcs', [
		'exec:phpcs'
	]);

	grunt.registerTask('update-po', [
		'exec:xgettext',
		'exec:msgmerge'
	]);
	grunt.registerTask('update-mo', [
		'exec:msgfmt'
	]);

	grunt.registerTask('build', [
		'compass:prod'
	]);

	grunt.registerTask('debug', [
	       'compass:dev',
		'watch:sass_dev'
	]);

	grunt.registerTask('default', ['build']);
};
