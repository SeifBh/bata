<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new EspritEntreAide\UserBundle\UserBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new EspritEntreAide\DemoBundle\DemoBundle(),
            new EspritEntreAide\AnnonceBundle\AnnonceBundle(),
            new EspritEntreAide\EvenementBundle\EvenementBundle(),
            new EspritEntreAide\ClubBundle\ClubBundle(),
            new EspritEntreAide\StoreBundle\StoreBundle(),
            new EspritEntreAide\SpottedBundle\SpottedBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),
            new Ivory\GoogleMapBundle\IvoryGoogleMapBundle(),
            new Ivory\SerializerBundle\IvorySerializerBundle(),
            new Http\HttplugBundle\HttplugBundle(),
            new CyberJaw\GoogleMapsBundle\GoogleMapsBundle(),
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new Knp\Bundle\TimeBundle\KnpTimeBundle(),
            new blackknight467\StarRatingBundle\StarRatingBundle(),
            new CMEN\GoogleChartsBundle\CMENGoogleChartsBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),

        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();

            if ('dev' === $this->getEnvironment()) {
                $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
                $bundles[] = new Symfony\Bundle\WebServerBundle\WebServerBundle();
            }
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
