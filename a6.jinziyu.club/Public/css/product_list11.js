$(".select_tj_itemBox").click(function() {
	$(".tj_itemBox").show();
	$(".sfz_itemBox").hide();
	$(".xyk_itemBox").hide();
	$(".list_by_time").hide();
	$(".list_by_member").show();
	$(".list_by_cat").hide();
	$(".list_by_sday").hide();
	$(".select_tj_itemBox").addClass('vux-tab-selected');
	$(".select_sfz_itemBox").removeClass('vux-tab-selected');
	$(".select_xyk_itemBox").removeClass('vux-tab-selected');
	$(".by_member").addClass('-color');
	$(".by_time").removeClass('-color');
	$(".by_cat").removeClass('-color');
	$(".by_sday").removeClass('-color');
	$(".item-title span").removeClass('p_name');
	$(".list_by_member .item-title").find("span").addClass('p_name');
});
$(".select_sfz_itemBox").click(function() {
	$(".sfz_itemBox").show();
	$(".tj_itemBox").hide();
	$(".xyk_itemBox").hide();
	$(".list_by_time").hide();
	$(".list_by_member").hide();
	$(".list_by_cat").hide();
	$(".list_by_sday").hide();
	$(".select_sfz_itemBox").addClass('vux-tab-selected');
	$(".select_tj_itemBox").removeClass('vux-tab-selected');
	$(".select_xyk_itemBox").removeClass('vux-tab-selected');
	$(".item-title span").removeClass('p_name');
	$(".sfz_itemBox .item-title").find("span").addClass('p_name');
});
$(".select_xyk_itemBox").click(function() {
	$(".xyk_itemBox").show();
	$(".sfz_itemBox").hide();
	$(".tj_itemBox").hide();
	$(".list_by_time").hide();
	$(".list_by_member").hide();
	$(".list_by_cat").hide();
	$(".list_by_sday").hide();
	$(".select_xyk_itemBox").addClass('vux-tab-selected');
	$(".select_sfz_itemBox").removeClass('vux-tab-selected');
	$(".select_tj_itemBox").removeClass('vux-tab-selected');
	$(".item-title span").removeClass('p_name');
	$(".xyk_itemBox .item-title").find("span").addClass('p_name');
});

$(".by_member").click(function() {
	$(".list_by_member").show();
	$(".list_by_time").hide();
	$(".list_by_cat").hide();
	$(".list_by_sday").hide();
	$(".by_member").addClass('-color');
	$(".by_time").removeClass('-color');
	$(".by_cat").removeClass('-color');
	$(".by_sday").removeClass('-color');
});
$(".by_time").click(function() {
	$(".list_by_time").show();
	$(".list_by_member").hide();
	$(".list_by_cat").hide();
	$(".list_by_sday").hide();
	$(".by_time").addClass('-color');
	$(".by_member").removeClass('-color');
	$(".by_cat").removeClass('-color');
	$(".by_sday").removeClass('-color');
});
$(".by_cat").click(function() {
	$(".list_by_cat").show();
	$(".list_by_member").hide();
	$(".list_by_time").hide();
	$(".list_by_sday").hide();
	$(".by_cat").addClass('-color');
	$(".by_member").removeClass('-color');
	$(".by_time").removeClass('-color');
	$(".by_sday").removeClass('-color');
});
$(".by_sday").click(function() {
	$(".list_by_sday").show();
	$(".list_by_member").hide();
	$(".list_by_time").hide();
	$(".list_by_cat").hide();
	$(".by_sday").addClass('-color');
	$(".by_member").removeClass('-color');
	$(".by_cat").removeClass('-color');
	$(".by_time").removeClass('-color');
});