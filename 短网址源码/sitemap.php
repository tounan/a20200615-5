<?php 

/*
 * ====================================================================================
 *	 Sitemap Plugin for 某某短域名系统 2.0
 * ----------------------------------------------------------------------------------
 *   This simple plugin  generates the sitemap of public* URLs and your custom pages of your URL 
 *	 shortener. If you want Google to crawl them, simply login to Google Webmaster Tools,
 *   add and validate your site and add the sitemap.
 *   *Public = URLs generated by anonymous users or the ones that not pass=protected. 	
 * ====================================================================================
 *   Configurations
 * ------------------------------------------------------------------------------------
 *   The sitemap doesn't need much configuration. It only requires the number urls to output.
 *   Just change $number=50;
 *
 *	If you want to rewrite sitemap.php to sitemap.xml (some search engines prefer .xml) 
 *  Add the following rule in your .htaccess file.
 *
 *  RewriteRule ^sitemap.xml?$ sitemap.php [QSA,NC,L]
 * ====================================================================================
 */	
	$number=50;
/*
 * ====================================================================================
 * ----------------------------------------------------------------------------------
 *   Warning! Please do not modify anything below this line if you don't have the 
 *   knowledge.
 * ----------------------------------------------------------------------------------
 * ====================================================================================
 */	
	include('includes/config.php');
	header('Content-type: application/xml');
	$db->object = TRUE;
	$urls=$db->get("url",array("userid"=>0,"pass"=>""),array("limit"=>$number));
	$pages=$db->get("page","",array("order"=>"id"));
	echo "<?xml version='1.0' encoding='UTF-8'?>\n";
?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">
	<url>
		<loc><?php echo $config["url"]?></loc>
		<lastmod><?php echo date('Y-m-d', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?php echo $config["url"]?>/user/login</loc>
		<lastmod><?php echo date('Y-m-d', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc><?php echo $config["url"]?>/user/register</loc>
		<lastmod><?php echo date('Y-m-d', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc><?php echo $config["url"]?>/contact</loc>
		<lastmod><?php echo date('Y-m-d', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.7</priority>
	</url>			
<?php foreach($pages as $page): ?>	
	<url>
		<loc><?php echo $config["url"].'/page/'.$page->seo?></loc>
		<lastmod><?php echo date('Y-m-d', time()); ?></lastmod>
		<changefreq>daily</changefreq>
		<priority>0.7</priority>
	</url>	
<?php endforeach;?>			
</urlset>
<?php echo "<!--Sitemap generated on ".date('Y-m-d H:i:s', time())."-->"; ?>