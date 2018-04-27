// JavaScript Document
function initMap(data){
	if(Object.prototype.toString.call(data) === '[object Array]'){
		for(var i = 0; i < data.length; i ++){
			createMap(data[i]);
		}
	}else{
	}
}
function createMap(data){ 
	var map = new BMap.Map(data.id); 
	map.centerAndZoom(new BMap.Point(data.center.x, data.center.y), data.lvl);
	setMapEvent(map);//设置地图事件
	addMapControl(map);//向地图添加控件
	addMapOverlay(map, data.marker);//向地图添加覆盖物
}
function setMapEvent(map){
	map.enableScrollWheelZoom();
	map.enableKeyboard();
	map.enableDragging();
	map.enableDoubleClickZoom()
}
function addClickHandler(target,window){
	target.addEventListener("click",function(){
		target.openInfoWindow(window);
	});
}
function createInfoWindow(data){
    var iw = new BMap.InfoWindow("<a href='"+data.href+"' style='color:#333;'>"+data.title+"</a>"+data.message, opts);
    return iw;
}
function createIcon(data){
    var icon = new BMap.Icon("assets/images/map_marker.png", new BMap.Size(data.w,data.h),{
		anchor: new BMap.Size(data.ox,data.oy),
		imageOffset: new BMap.Size(-data.l,-data.t)
	});
    return icon;
}
function addMapOverlay(map, data){
	map.clearOverlays();
	for(var i=0;i<data.length;i++){
		var json = data[i],
			p0 = json.point.split("|")[0],
			p1 = json.point.split("|")[1],
			point = new BMap.Point(p0,p1),
			iconImg = createIcon(json.icon),
			marker = new BMap.Marker(point,{icon:iconImg});
			//iw = createInfoWindow(i);
		map.addOverlay(marker);
    }
}
function addMapControl(map){
	var navControl = new BMap.NavigationControl({
		type: BMAP_NAVIGATION_CONTROL_ZOOM,
		anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
		offset: new BMap.Size(20, 255)
	});
	map.addControl(navControl);
}

$(function(){
	var mapData = [
		{
			id: 'bmap-1',
			center: {
				x: 121.430492,
				y: 31.200754
			},
			lvl: 18,
			marker: [{title:"艾卫艾商贸(上海)有限公司",point:"121.430492|31.200754",isOpen:0,icon:{w:20,h:25,l:0,t:0,ox:10,oy:25}}]
		},
		{
			id: 'bmap-2',
			center: {
				x: 114.032097,
				y: 22.538782
			},
			lvl: 18,
			marker: [{title:"深圳分公司",point:"114.032097|22.538782",isOpen:0,icon:{w:20,h:25,l:0,t:0,ox:10,oy:25}}]
		},
		{
			id: 'bmap-3',
			center: {
				x: 116.475012,
				y: 39.953405
			},
			lvl: 18,
			marker: [{title:"北京分公司",point:"116.475012|39.953405",isOpen:0,icon:{w:20,h:25,l:0,t:0,ox:10,oy:25}}]
		}
	]
	initMap(mapData);
})