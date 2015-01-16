module.exports = function(grunt) {
	// Do grunt-related things in here


	// Loading our Grunt plugins
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	// Grunt plugin task settings 
	grunt.initConfig({

		// Watch for changes "if that then this"
		watch: {
			scripts: {
				files: ['**/*.less'],
				tasks: ['less'],
				options: {
					spawn: false,
				},
			
			},

				scripts2: {

			files: ['**/*.css'],
				tasks: ['cssmin'],
				options: {
					spawn: false,
				},
					},
		},


		// Compiling less 
		less: {
			production: {
				options: {
					paths: ["assets/css"],
					plugins: [
						/*new require('less-plugin-autoprefix')({browsers: ["last 2 versions"]}),
        new require('less-plugin-clean-css')(cleanCssOptions)*/
					],

				},
				files: {
					"css/style.css": "css/style.less"
				}
			}
		},

		cssmin: {
			target: {
				files: [{
					expand: true,
					cwd: 'css',
					src: ['*.css', '!*.min.css'],
					dest: 'css',
					ext: '.min.css'
				}]
			}
		}


	});


};