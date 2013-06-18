'use strict';

module.exports = function (grunt) {

    // Project configuration
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // Clean files before replacement
        clean: {
            all: {
                src: ["public/assets/css/style.min.css", "public/assets/js/script.min.css", "public/build/css/style.css", "public/build/js/script.js"]
            },
            css: {
                src: ["public/assets/css/style.min.css", "public/build/css/style.css"]
            },
            js: {
                src: ["public/assets/js/script.min.js", "public/build/js/script.js"]
            }
        },
        // LESS compile to CSS and minify
        less: {
            bs2: {
                options: {
                    yuicompress: true,
                    paths: ["public/build/less/bootstrap2"]
                },
                files: {
                    "public/build/css/style.css": "public/build/less/bootstrap2/bootstrap.less"
                }
            },
            bs3: {
                options: {
                    yuicompress: true,
                    paths: ["public/build/less/bootstrap3", "public/build/less/font-awesome", "public/build/fonts"]
                },
                files: {
                    "public/build/css/style.css": "public/build/less/bootstrap3/custom-bootstrapper.less"
                }
            }
        },
        // Concat and minify CSS files
        cssmin: {
            compress: {
                files: {
                    "public/assets/css/bootstrap.min.css": [
                        "public/build/css/style.css"
                    ]
                }
            }
        },
        // JS concat
        concat: {
            bs2: {
                src: ["public/build/js/bootstrap2/*.js"],
                dest: "public/build/js/bootstrap.js"
            },
            bs3: {
                src: ["public/build/js/bootstrap3/*.js"],
                dest: "public/build/js/bootstrap.js"
            }
        },
        // Uglify
        uglify: {
            my_target: {
                files: {
                    "public/assets/js/bootstrap.min.js": ["public/build/js/bootstrap.js"]
                }
            }
        },
        // gzip assets 1-to-1 for production
        compress: {
            main: {
                options: {
                    mode: 'gzip'
                },
                expand: true,
                cwd: 'public/assets/',
                src: ['js/bootstrap.min.js', 'css/bootstrap.min.css'],
                dest: 'public/assets/'
            }
        },
        // Run PHP Unit tests
        phpunit: {
            classes: {
                dir: 'app/tests'
            },
            options: {
                bin: 'vendor/bin/phpunit'
            }
        },
        notify: {
            phpunit: {
                options: {
                    message: "PHPUnit just completed"
                }
            },
            design: {
                options: {
                    message: "CSS & JS has been compiled"
                }
            },
            bs2: {
                options: {
                    message: "Bootstrap 2 - compiled and updated"
                }
            },
            bs3: {
                options: {
                    message: "Bootstrap 3 - compiled and updated"
                }
            }
        },
        // Watch and live reloading (which is now built into watch)
        // <script src="http://localhost:35729/livereload.js"></script> - add to page
        watch: {
            css: {
                files: [
                    "public/build/less/**/*.less",
                    "app/views/**"
                ],
                tasks: ["watch-css"],
                options: {
                    nospawn: true,
                    livereload: true
                }
            },
            js: {
                files: [
                    "public/build/js/**/*.js",
                    "app/views/**"
                ],
                tasks: ["watch-js"],
                options: {
                    nospawn: true,
                    livereload: true
                }
            },
            all: {
                files: [
                    "public/build/less/**/*.less",
                    "public/build/js/**/*.js",
                    "app/views/**",
                    "app/routes.php"
                ],
                tasks: ["watch-all"],
                options: {
                    nospawn: true,
                    livereload: true
                }
            },
            bs2: {
                files: [
                    "public/build/less/bootstrap2/*.less",
                    "public/build/js/bootstrap2/*.js",
                    "app/views/**"
                ],
                tasks: ["watch-bs2"],
                options: {
                    nospawn: true,
                    livereload: true
                }
            },
            bs3: {
                files: [
                    "public/build/less/bootstrap3/*.less",
                    "public/build/js/bootstrap3/*.js",
                    "app/views/**"
                ],
                tasks: ["watch-bs3"],
                options: {
                    nospawn: true,
                    livereload: true
                }
            }    
        }

    });

    // Load the pluigns the provide the tasks.
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-phpunit');
    grunt.loadNpmTasks('grunt-notify');

    // Default task(s)
    grunt.registerTask('watch-js', ["clean:js", "concat", "uglify", "notify:js"]);
    grunt.registerTask('watch-css', ["clean:css", "less", "cssmin", "notify:css"]);
    grunt.registerTask('watch-all', ["clean:all", "less", "cssmin", "concat", "uglify", "notify:design"]);
    grunt.registerTask('default', ["clean:all", "less", "cssmin", "concat", "uglify"]);

    // Bootstrap specific watch tasks
    grunt.registerTask('build-bs2', ["clean:all", "less:bs2", "cssmin", "concat:bs2", "uglify"]);
    grunt.registerTask('build-bs3', ["clean:all", "less:bs3", "cssmin", "concat:bs3", "uglify"]);
    grunt.registerTask('watch-bs2', ["clean:all", "less:bs2", "cssmin", "concat:bs2", "uglify"]);
    grunt.registerTask('watch-bs3', ["clean:all", "less:bs3", "cssmin", "concat:bs3", "uglify"]);
};