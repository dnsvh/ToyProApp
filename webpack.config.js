// webpack.config.js
const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    //.setManifestKeyPrefix('build/')   // only for CDN/subdirectory deploy

    /*
     * ENTRY CONFIG
     */
    .addEntry('app', './assets/app.js')

    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    .enableStimulusBridge('./assets/controllers.json')

    // split files for optimization
    .splitEntryChunks()

    // runtime.js required
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())

    // Babel polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs    = '3.23';
    })

    // ** enable Sass/SCSS support **
    .enableSassLoader()

// uncomment if you need any of these:
// .enableTypeScriptLoader()
// .enableReactPreset()
// .enableIntegrityHashes(Encore.isProduction())
// .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
