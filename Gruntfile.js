module.exports = function(g) {

	g.initConfig({
		concat: {
			options: {
				separator: '/* -------------- */',
			},
			js: {
				src: ['src/js/*.js'],
				dest: 'js/main.js',
			},
			css: {
				src: ['src/css/*.css'],
				dest: 'css/main.css',
			},
		}, //concat

		sass: {
			dist: {
				options: {
					style: 'compressed',
				},
				files: {
					'css/main.css': 'src/css/main.scss'
				},
			},
			dev: {
				options: {
					style: 'nested',
				},
				files: {
					'css/main.css': 'src/css/main.scss'
				},
			}
		},
		connect: {
			server: {
				options: {
					port: 8080,
					base: ''
				}
			}
		},
		watch: {
			options: {
				livereload: true,
			},
			js: {
				files: ['src/js/**/*.js'],
				tasks: [],
			},
			css: {
				files: ['src/css/**/*.css', 'src/css/**/*.scss'],
				tasks: ['sass:dev'],
			},
			html: {
				files: ['*.html'],
				tasks: [],
			}
		},

	});


	g.loadNpmTasks('grunt-contrib-concat');
	g.loadNpmTasks('grunt-contrib-watch');
	g.loadNpmTasks('grunt-contrib-connect');
	g.loadNpmTasks('grunt-contrib-sass');

	g.registerTask('default', ['concat', 'sass:dev', 'connect', 'watch']);
};
