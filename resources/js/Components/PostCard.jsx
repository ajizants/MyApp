// components/PostCard.jsx
import React from "react";
import { Link } from "@inertiajs/react";

const PostCard = ({ post }) => {
    return (
        <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
            <img
                src={post.image}
                alt={post.title}
                className="w-full h-64 object-cover"
            />
            <div className="p-6">
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-2">
                    {post.title}
                </h2>
                <p className="text-gray-700 dark:text-gray-300 mb-4">
                    {post.content.slice(0, 200)}...
                </p>
                {/* rote slug */}
                <Link
                    href={`/posts/${post.slug}`}
                    className="text-blue-500 hover:underline"
                >
                    Read more
                </Link>
            </div>
        </div>
    );
};

export default PostCard;
