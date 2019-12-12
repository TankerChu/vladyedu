<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'course'         => [
        'title'          => 'Courses',
        'title_singular' => 'Course',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Title',
            'title_helper'            => 'Tên Khóa Học',
            'date_time'               => 'Date Time',
            'date_time_helper'        => 'Thời Gian Khai Giảng Khóa Học',
            'address'                 => 'Address',
            'address_helper'          => 'Địa Chỉ Khóa Học',
            'introduction'            => 'Introduction',
            'introduction_helper'     => 'Giới Thiệu Khóa Học',
            'info'                    => 'Info',
            'info_helper'             => 'Thông Tin Khóa Học',
            'content'                 => 'Content',
            'content_helper'          => 'Nội Dung Khóa Học',
            'slug'                    => 'Slug',
            'slug_helper'             => '',
            'is_featured'             => 'Is Featured',
            'is_featured_helper'      => 'Khóa Học Hiện Lên Trang Chủ',
            'course_cover'            => 'Course Cover',
            'course_cover_helper'     => 'Ảnh Cover cho khóa học',
            'course_thumbnail'        => 'Course Thumbnail',
            'course_thumbnail_helper' => 'Ảnh khóa học để hiện ở ngoài',
            'course_image'            => 'Course Image',
            'course_image_helper'     => 'Ảnh chi tiết khóa học',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'video_link'              => 'Video Link',
            'video_link_helper'       => 'Video khóa học (link youtube)',
        ],
    ],
    'event'          => [
        'title'          => 'Event',
        'title_singular' => 'Event',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'name'                 => 'Name',
            'name_helper'          => 'Tên sự kiện',
            'location_name'        => 'Location Name',
            'location_name_helper' => 'Tên địa chỉ',
            'address'              => 'Address',
            'address_helper'       => 'Địa chỉ sự kiện',
            'city'                 => 'City',
            'city_helper'          => 'Thành phố diễn ra sự kiện',
            'time'                 => 'Time',
            'time_helper'          => 'Thời gian bắt đầu sự kiện',
            'price'                => 'Price',
            'price_helper'         => 'Giá vé',
            'introduction'         => 'Introduction',
            'introduction_helper'  => 'Giới Thiệu Sự Kiện',
            'content'              => 'Content',
            'content_helper'       => 'Nội dung sự kiện',
            'slug'                 => 'Slug',
            'slug_helper'          => '',
            'event_cover'          => 'Event Cover',
            'event_cover_helper'   => 'Ảnh cover sự kiện',
            'link_video'           => 'Link Video',
            'link_video_helper'    => 'Video cho sự kiện (link youtube)',
            'event_image'          => 'Event Image',
            'event_image_helper'   => 'Ảnh sự kiện',
            'created_at'           => 'Created at',
            'created_at_helper'    => '',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => '',
        ],
    ],
    'client'         => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => 'Tên khách hàng',
            'email'             => 'Email',
            'email_helper'      => 'Email khách hàng',
            'phone'             => 'Phone',
            'phone_helper'      => 'Số điện thoại khách hàng',
            'city'              => 'City',
            'city_helper'       => 'Thành phố khách hàng sinh sống',
            'message'           => 'Message',
            'message_helper'    => 'Tin nhắn khách hàng',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'course'            => 'Course',
            'course_helper'     => 'Khóa học khách hàng đăng kí',
            'events'            => 'Events',
            'events_helper'     => 'Sự kiện khách hàng đăng kí',
        ],
    ],
];
