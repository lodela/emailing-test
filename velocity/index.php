#set($data = {
  "geo_id": "562",
  "geo_name": "Barcelona",
  "geo_image": "https://cdn.tripadvisor.com/img2/email/vr/aps5-2_barcelona.jpg",
  "geo_link": "https://www.viator.com/collections/Hidden-Gems-in-Barcelona/c7",
  "recommended_products": [
    {
      "product_code": "2140BCNHOP",
      "product_name": "Barcelona City Tour Hop-On Hop-Off",
      "product_rating": "4.5",
      "product_photo_url": "https://media.tacdn.com/media/attractions-splice-spp-360x240/07/1e/c1/f3.jpg",
      "product_link": "https://www.viator.com/tours/x/x/d0-2140BCNHOP",
      "product_review_count": "1864"
    },
    {
      "product_code": "2916BARCELONA",
      "product_name": "City Sightseeing Barcelona Hop-On Hop-Off Bus Tour",
      "product_rating": "4.0",
      "product_photo_url": "https://media.tacdn.com/media/attractions-splice-spp-360x240/06/70/7f/a3.jpg",
      "product_link": "https://www.viator.com/tours/x/x/d0-2916BARCELONA",
      "product_review_count": "2648"
    },
    {
      "product_code": "5716P2",
      "product_name": "Montserrat Tour from Barcelona Including Lunch and Gourmet Wine Tasting",
      "product_rating": "5.0",
      "product_photo_url": "https://media.tacdn.com/media/attractions-splice-spp-360x240/06/71/9c/84.jpg",
      "product_link": "https://www.viator.com/tours/x/x/d0-5716P2",
      "product_review_count": "1502"
    }
  ]
})
<!DOCTYPE html>
<html>
<head>
	<title>Explore the unexpected in ${data.geo_name}</title>
	<style type="text/css">
		img { max-width: 100%; height: auto; }
	</style>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td bgcolor="white" align="center">
				<table
                    border="0"
                    cellpadding="0"
                    cellspacing="0"
                    width="600"
                    style="border-collapse: collapse;"
                >
					<tr>
						<td
                            style="
                                color: #333333;
                                font-size: 11px;
                                font-family: Roboto, Arial, Helvetica, sans-serif;
                                line-height: 15px;
                                text-align:
                                left; padding-top: 8px;
                                padding-left: 10px;
                                padding-bottom: 8px;"
                        >
							<a
                                name="readonline"
                                href="https://codepen.io/lodela/full/yLRMjGx"
                                xt="SPCLICKTOVIEW"
                                target="_blank"
                                style="text-decoration: underline; color: #4990E2;"
                                id="readonline">
                                    Read Online
                            </a>
						</td>
					</tr>
					<tr>
						<td align="center" valign="top" style="padding: 40px 0 30px 0;">
							<img src="https://cdn.tripadvisor.com/img2/email/viator_logo_v2.png" alt="Viator Logo" width="150" height="55" style="display: block;">
						</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#FFFFFF" style="font-family: 'Roboto', sans-serif; padding: 0px 0 30px 0;">
							<h1 style="font-family: 'Roboto', sans-serif; color: #36332D; font-size: 38px; font-weight: 600; text-align: center; margin: 0 0 30px 0;">Explore the unexpected in ${data.geo_name}</h1>
							<img src="${data.geo_image}" alt="${data.geo_name}" width="100%" height="auto" style="display: block;">
							<p style="font-size: 20px; line-height: 32px; color: #36332D; text-align: center; margin: 30px 0; padding: 0 15px;">Every destination has its must-sees, but we're here to help you see a side of ${data.geo_name} most travelers miss. Venture off the beaten path and escape the crowds with our hand-picked list of experiences that reveals its true character.</p>
                            <div style="text-align: center; background-color: rgba(175, 20, 62, 1);">
                                <a
                                    href="${data.geo_link}"
                                    target="_blank"
                                    style="
                                        background-color: rgba(175, 20, 62, 1);
                                        color: #fff;
                                        display: inline-block;
                                        font-size: 16px;
                                        font-weight: bold;
                                        text-transform: uppercase;
                                        text-decoration: none;
                                        padding: 32px 0;
                                        width: 100%;
                                    "
                                    >Discover Hidden Gems</a
                                >
                            </div>
						</td>
					</tr>
                    <tr>
                        <td align="center" bgcolor="#FFFFFF" style="font-family: 'Roboto', sans-serif; padding: 0px 0 30px 0">
                            <div style="max-width: 600px; margin: 0 auto">
                                <h1
                                    style="
                                    font-size: 24px;
                                    font-weight: bold;
                                    color: #36332d;
                                    margin: 0;
                                    padding: 0;
                                    text-align: left;
                                    "
                                >
                                    Top pick based on your bookings:
                                </h1>
                            </div>
                        </td>
                    </tr>
                    <!-- recommendation section starts-->
                    #set($products = $data.recommended_products)
                    #if($products.size() > 0)
                        #foreach($product in $products)
                            <tr>
                                <td align="center" bgcolor="#FFFFFF" style="font-family: 'Roboto', sans-serif; padding: 0px 0 30px 0">
                                    <div style="max-width: 600px; margin: 0 auto">
                                        <div
                                            style="
                                            max-width: 580px;
                                            margin: 32px auto;
                                            display: flex;
                                            flex-wrap: wrap;
                                            "
                                        >
                                            <div style="display: flex">
                                                <div style="flex: 1">
                                                    <div style="padding: 1rem">
                                                        <p
                                                            style="
                                                            font-size: 1.25rem;
                                                            margin-bottom: 0.5rem;
                                                            margin-top: 0;
                                                            text-align: left;
                                                            font-style: normal;
                                                            "
                                                        >
                                                            $product.product_name
                                                        </p>
                                                        <div>
                                                            <div
                                                                style="
                                                                    margin: 0 10px 0 0;
                                                                    width: 33%;
                                                                    position: relative;
                                                                    float: left;
                                                                    text-align: left;
                                                                "
                                                            >
                                                                <img
                                                                    src="https://cdn.tripadvisor.com/img2/email/rex/ratingstar${$product.product_rating}.png"
                                                                    alt="${$product.product_rating} stars"
                                                                    style="height: 1rem"
                                                                />
                                                            </div>
                                                            <p
                                                            style="
                                                                font-size: 18px;
                                                                color: #6c757d;
                                                                text-align: left;
                                                                padding-left: 32px;
                                                            "
                                                            >
                                                                $product.product_review_count <span>reviews</span>
                                                            </p>
                                                        </div>
                                                        <div
                                                            style="
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            "
                                                        >
                                                            <a
                                                                href="$product.product_link"
                                                                target="_blank"
                                                                style="
                                                                    text-decoration: none;
                                                                    background-color: transparent;
                                                                    border: 1px solid rgba(175, 20, 62, 1);
                                                                    color: rgba(175, 20, 62, 1);
                                                                    font-size: 18px;
                                                                    font-weight: 400;
                                                                    padding: 20px 0;
                                                                    cursor: pointer;
                                                                    width: 100%;
                                                                "
                                                            >
                                                                See details
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="flex: 0 0 50%">
                                                    <a href="$product.product_link" target="_blank"><img src="$product.product_photo_url" alt="$product.product_name" style="max-width: 100%; height: auto; display: block"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                </td>
                            </tr>
                        #end
                        <!-- recommendation section finish-->
                    <tr>
                        <td bgcolor="#FFFFFF" style="padding: 20px 0 40px 0; font-family: 'Roboto', sans-serif;">
                            <p style="font-size: 18px; line-height: 30px; color: #36332D; margin: 0;">Thank you for choosing Viator. We hope to see you soon on another adventure.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
