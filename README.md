# Magento 2 route samples

**This is Magento 2 module created during learing Magento 2 development. This module contain routing samples that can be used in Magento 2 development.**

### Examples

- For JSON result object: `http://localhost/route/result/json`
- For RAW result object: `http://localhost/route/result/raw`
- For REDIRECT result object: `http://localhost/route/result/redirect`
- For FORWARD result object: `http://localhost/route/result/forward`
- For CUSTOM route: `http://localhost/route/result/custom`, also can be called like this `http://localhost/customroute`

We can call custom route from two different paths:
 - First URL `route/resut/custom` is standard route method without using custom Route class.
 - Second URL path `localhost/customroute` is defined with using Router class where we define what action will be executed when specific URL parameter is called.

## Admin route

- For admin route: `http://localhost/<admin-url>/simpleroute/result/view`
