<?php
class Wire_Bot_Connect_Rest_Api {

    public function register_endpoints() {
		register_rest_route('wire-bot/v1', '/user/(?P<id>\d+)', array(
			'methods' => 'GET',
			'callback' => array($this, 'get_user'),
		));

		register_rest_route('wire-bot/v1', '/user/(?P<id>\d+)/friends', array(
			'methods' => 'GET',
			'callback' => array($this, 'get_user_friends'),
		));

		// Add more routes as needed...
	}

	public function get_user($request) {
        $id = $request['id'];
        $user = get_userdata($id);

        // Convert the user data to a format suitable for the REST API...
        // ...

        return new WP_REST_Response($user, 200);
    }

    public function get_user_friends($request) {
        $id = $request['id'];
        $friends = friends_get_friend_user_ids($id);

        // Convert the friends data to a format suitable for the REST API...
        // ...

        return new WP_REST_Response($friends, 200);
    }


}




