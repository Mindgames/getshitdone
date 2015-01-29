module.exports = function(grunt) {
	// Do grunt-related things in here


	// Loading our Grunt plugins
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-browser-sync');

	// Grunt plugin task settings 
	grunt.initConfig({

		// WATCH TASKS
		watch: {
			scripts: {
				files: ['css/less/*.less'],
				tasks: ['less','cssmin'],
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

		copy: {
			main: {
				files: [
					// includes files within path
					{
						expand: true,
						flatten: true,
						src: ['lib/bootstrap/less/*'],
						dest: 'css/less',
						filter: ''
					}, {
						expand: true,
						flatten: true,
						src: ['lib/bootstrap/less/mixins/*'],
						dest: 'css/less/mixins',
						filter: ''
					},

					// includes files within path and its sub-directories
					//{expand: true, src: ['path/**'], dest: 'dest/'},

					// makes all src relative to cwd
					//{expand: true, cwd: 'path/', src: ['**'], dest: 'dest/'},

					// flattens results to a single level
					//{expand: true, flatten: true, src: ['path/**'], dest: 'dest/', filter: 'isFile'},
				],
			},
		},

		browserSync: {
    bsFiles: {
        src : 'css/style.css'
    },
    options: {
   		 proxy: "local.dev",
      
    }
},


		// Compiling less 
		less: {
			compileCore: {
				options: {
					strictMath: true,
					sourceMap: true,
					outputSourceFiles: true,
					sourceMapFilename: 'main.css.map', 
					sourceMapURL: 'main.css.map', 

				},
				src: 'css/less/config.less',
				dest: 'css/style.css'
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