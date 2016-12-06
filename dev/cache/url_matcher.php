<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/mchat')) {
            // dmzx_mchat_controller
            if ($pathinfo === '/mchat') {
                return array (  '_controller' => 'dmzx.mchat.main.controller:page',  'page' => 'custom',  '_route' => 'dmzx_mchat_controller',);
            }

            // dmzx_mchat_page_controller
            if (preg_match('#^/mchat/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dmzx_mchat_page_controller')), array (  '_controller' => 'dmzx.mchat.main.controller:page',));
            }

            // dmzx_mchat_action_controller
            if (preg_match('#^/mchat\\-(?P<action>add|edit|del|refresh|whois)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dmzx_mchat_action_controller')), array (  '_controller' => 'dmzx.mchat.main.controller:action',));
            }

        }

        if (0 === strpos($pathinfo, '/fltl')) {
            // fltl_controller
            if (preg_match('#^/fltl/(?P<route>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fltl_controller')), array (  '_controller' => 'sitesplat.fltl.main:handle',));
            }

            // fltl_index
            if ($pathinfo === '/fltl/') {
                return array (  '_controller' => 'sitesplat.fltl.main:handle',  '_route' => 'fltl_index',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
